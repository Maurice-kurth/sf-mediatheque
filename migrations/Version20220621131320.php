<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220621131320 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE adherents ADD email VARCHAR(180) NOT NULL, ADD roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', ADD password VARCHAR(255) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_562C7DA3E7927C74 ON adherents (email)');
        $this->addSql('ALTER TABLE administrateurs ADD email VARCHAR(180) NOT NULL, ADD roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', ADD password VARCHAR(255) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B5ED4E13E7927C74 ON administrateurs (email)');
        $this->addSql('ALTER TABLE cd ADD nom VARCHAR(255) NOT NULL, ADD type VARCHAR(255) NOT NULL, ADD support VARCHAR(255) NOT NULL, ADD fragile TINYINT(1) NOT NULL, ADD etat VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE dvd ADD nom VARCHAR(255) NOT NULL, ADD type VARCHAR(255) NOT NULL, ADD support VARCHAR(255) NOT NULL, ADD fragile TINYINT(1) NOT NULL, ADD etat VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE revues ADD nom VARCHAR(255) NOT NULL, ADD type VARCHAR(255) NOT NULL, ADD support VARCHAR(255) NOT NULL, ADD fragile TINYINT(1) NOT NULL, ADD etat VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_562C7DA3E7927C74 ON adherents');
        $this->addSql('ALTER TABLE adherents DROP email, DROP roles, DROP password');
        $this->addSql('DROP INDEX UNIQ_B5ED4E13E7927C74 ON administrateurs');
        $this->addSql('ALTER TABLE administrateurs DROP email, DROP roles, DROP password');
        $this->addSql('ALTER TABLE cd DROP nom, DROP type, DROP support, DROP fragile, DROP etat');
        $this->addSql('ALTER TABLE dvd DROP nom, DROP type, DROP support, DROP fragile, DROP etat');
        $this->addSql('ALTER TABLE revues DROP nom, DROP type, DROP support, DROP fragile, DROP etat');
    }
}
