<?php

namespace HexMakina\Interfaces\Database;

interface ConnectionInterface
{
    public function __construct($dsn, $username = '', $password = '', $driver_options=[]);

    public function driver_name();
    public function database_name(): string;

    public function prepare($sql_statement, $options = []);

    public function transact(): bool;
    public function commit(): bool;
    public function rollback(): bool;

    public function last_inserted_id($name = null);
    public function error_code(): array;
    public function error_info(): array;

    public function query($sql_statement, $fetch_mode = null, $fetch_col_num = null);
    public function alter($sql_statement);
}
