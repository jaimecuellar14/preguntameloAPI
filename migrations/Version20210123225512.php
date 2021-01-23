<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210123225512 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE expert_answer ADD question_id_id INT DEFAULT NULL, DROP question_id');
        $this->addSql('ALTER TABLE expert_answer ADD CONSTRAINT FK_BFCF43E34FAF8F53 FOREIGN KEY (question_id_id) REFERENCES question (id)');
        $this->addSql('CREATE INDEX IDX_BFCF43E34FAF8F53 ON expert_answer (question_id_id)');
        $this->addSql('ALTER TABLE question ADD expert_id INT NOT NULL, ADD status_id INT NOT NULL, ADD date DATETIME NOT NULL');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494EC5568CE4 FOREIGN KEY (expert_id) REFERENCES experts (id)');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494E6BF700BD FOREIGN KEY (status_id) REFERENCES status (id)');
        $this->addSql('CREATE INDEX IDX_B6F7494EC5568CE4 ON question (expert_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B6F7494E6BF700BD ON question (status_id)');
        $this->addSql('ALTER TABLE user_answer ADD question_id_id INT DEFAULT NULL, DROP question_id');
        $this->addSql('ALTER TABLE user_answer ADD CONSTRAINT FK_BF8F51184FAF8F53 FOREIGN KEY (question_id_id) REFERENCES question (id)');
        $this->addSql('CREATE INDEX IDX_BF8F51184FAF8F53 ON user_answer (question_id_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE expert_answer DROP FOREIGN KEY FK_BFCF43E34FAF8F53');
        $this->addSql('DROP INDEX IDX_BFCF43E34FAF8F53 ON expert_answer');
        $this->addSql('ALTER TABLE expert_answer ADD question_id INT NOT NULL, DROP question_id_id');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494EC5568CE4');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494E6BF700BD');
        $this->addSql('DROP INDEX IDX_B6F7494EC5568CE4 ON question');
        $this->addSql('DROP INDEX UNIQ_B6F7494E6BF700BD ON question');
        $this->addSql('ALTER TABLE question DROP expert_id, DROP status_id, DROP date');
        $this->addSql('ALTER TABLE user_answer DROP FOREIGN KEY FK_BF8F51184FAF8F53');
        $this->addSql('DROP INDEX IDX_BF8F51184FAF8F53 ON user_answer');
        $this->addSql('ALTER TABLE user_answer ADD question_id INT NOT NULL, DROP question_id_id');
    }
}
