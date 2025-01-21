.PHONY: run
run:
	php -S localhost:8080 -t app

.PHONY: loaddb
loaddb:
	sqlite3 app/_inc/BD/myapp.sqlite ".read app/_inc/BD/create_table.sql"
