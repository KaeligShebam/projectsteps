<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210929070836 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE steps ADD commentcustomercontentreception VARCHAR(255) DEFAULT NULL, ADD commentpicturesreception VARCHAR(255) DEFAULT NULL, ADD commentwebdesignprogress VARCHAR(255) DEFAULT NULL, ADD commentwebdesignwait VARCHAR(255) DEFAULT NULL, ADD commentwebdesignvalidated VARCHAR(255) DEFAULT NULL, ADD commentwebintegration VARCHAR(255) DEFAULT NULL, ADD commentwebtraining VARCHAR(255) DEFAULT NULL, ADD commentonline VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE steps DROP commentcustomercontentreception, DROP commentpicturesreception, DROP commentwebdesignprogress, DROP commentwebdesignwait, DROP commentwebdesignvalidated, DROP commentwebintegration, DROP commentwebtraining, DROP commentonline');
    }
}
