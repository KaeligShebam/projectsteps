<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210923144905 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE customer DROP FOREIGN KEY FK_81398E0973B21E9C');
        $this->addSql('DROP INDEX IDX_81398E0973B21E9C ON customer');
        $this->addSql('ALTER TABLE customer DROP step_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE customer ADD step_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE customer ADD CONSTRAINT FK_81398E0973B21E9C FOREIGN KEY (step_id) REFERENCES steps (id)');
        $this->addSql('CREATE INDEX IDX_81398E0973B21E9C ON customer (step_id)');
    }
}
