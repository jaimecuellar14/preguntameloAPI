<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210121112705 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE expert_answer DROP FOREIGN KEY expert_answer_ibfk_1');
        $this->addSql('DROP INDEX question_id ON expert_answer');
        $this->addSql('ALTER TABLE questions_table DROP FOREIGN KEY questions_table_ibfk_1');
        $this->addSql('ALTER TABLE questions_table DROP FOREIGN KEY questions_table_ibfk_2');
        $this->addSql('DROP INDEX from_user ON questions_table');
        $this->addSql('DROP INDEX expert ON questions_table');
        $this->addSql('ALTER TABLE user_answer DROP FOREIGN KEY user_answer_ibfk_1');
        $this->addSql('DROP INDEX question_id ON user_answer');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE expert_answer ADD CONSTRAINT expert_answer_ibfk_1 FOREIGN KEY (question_id) REFERENCES questions_table (id)');
        $this->addSql('CREATE INDEX question_id ON expert_answer (question_id)');
        $this->addSql('ALTER TABLE questions_table ADD CONSTRAINT questions_table_ibfk_1 FOREIGN KEY (from_user) REFERENCES users (id)');
        $this->addSql('ALTER TABLE questions_table ADD CONSTRAINT questions_table_ibfk_2 FOREIGN KEY (expert) REFERENCES experts (id)');
        $this->addSql('CREATE INDEX from_user ON questions_table (from_user)');
        $this->addSql('CREATE INDEX expert ON questions_table (expert)');
        $this->addSql('ALTER TABLE user_answer ADD CONSTRAINT user_answer_ibfk_1 FOREIGN KEY (question_id) REFERENCES questions_table (id)');
        $this->addSql('CREATE INDEX question_id ON user_answer (question_id)');
    }
}
