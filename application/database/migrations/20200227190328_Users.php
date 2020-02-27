<?php

class Migration_Users extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'role_id' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
            'username' => array(
                'type' => 'varchar',
                'constraint' => 20,
            ),
            'password' => array(
                'type' => 'varchar',
                'constraint' => 500,
            ),
            'name' => array(
                'type' => 'varchar',
                'constraint' => 20,
            ),
            'dob' => array(
                'type' => 'DATETIME',
            ),
            'date_created' => array(
                'type' => 'DATETIME'
            ),
            'date_updated' => array(
                'type' => 'DATETIME'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users');
        $this->db->query(add_foreign_key('users', 'role_id', 'roles(id)', 'CASCADE', 'CASCADE'));
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}
