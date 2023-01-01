cat .setup 2> /dev/null
# If Not Set Up Yet
if [ $? -ne 0 ]; then
	# Change Config to Use Not Only Socket But Also Network
	sed -i "s/skip-networking/# skip-networking/g" /etc/my.cnf.d/mariadb-server.cnf
	# Change Config to Allow Every Host
	sed -i "s/.*bind-address\s*=.*/bind-address=0.0.0.0\nport=3306/g" /etc/my.cnf.d/mariadb-server.cnf
	pkill mariadb
	# Mark as Set Up Finished
	touch .setup
fi  

# chown: /auth_pam_tool_dir/auth_pam_tool: No such file or directory error
mkdir /auth_pam_tool_dir
touch /auth_pam_tool_dir/auth_pam_tool
# mysql_install_db: MariaDB 초기화
# --user myslqd(mysql 서버)를 구동하기 위한 사용자 이름
# --basedir mysql설치 디렉토리 경로
# --datadir mysql데이터 디렉토리 경로
# --skip-test-db 익명유저 생성 방지
# https://pyrasis.com/book/DockerForTheReallyImpatient/Chapter16/02
mysql_install_db --user=root \
								--basedir=/usr \
								--datadir=/var/lib/mysql \
								--skip-test-db




# mysql은 설치 후 root와 *패스워드가 없는*익명 사용자를 자동으로 만듦
# ALTER USER IDENTIFIED BY: 사용자 비밀번호 설정
cat > /tmp/mysql_init << EOF
FLUSH PRIVILEGES;
CREATE DATABASE IF NOT EXISTS $DB_NAME;
CREATE USER IF NOT EXISTS '$USER_ID'@'%' IDENTIFIED BY '$USER_PASSWORD';
GRANT ALL PRIVILEGES ON $DB_NAME.* TO '$USER_ID'@'%';
ALTER USER 'root'@'localhost' IDENTIFIED BY '$DB_ROOT_PASSWORD';
FLUSH PRIVILEGES;
EOF
# mysqld: mysql server
# bootstrap mode: mysql 스크립트 활성화
/usr/bin/mysqld --user=root --bootstrap < /tmp/mysql_init
# mysqld 활성화
/usr/bin/mysqld --user=root
