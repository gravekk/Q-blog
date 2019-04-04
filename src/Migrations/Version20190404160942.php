<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190404160942 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user ADD last_name VARCHAR(255) NOT NULL, ADD first_name VARCHAR(255) NOT NULL, ADD short_info LONGTEXT DEFAULT NULL, ADD add_date DATETIME NOT NULL, ADD born_date DATETIME DEFAULT NULL, ADD friend VARCHAR(255) NOT NULL, ADD feeds LONGTEXT DEFAULT NULL, ADD followers LONGTEXT DEFAULT NULL, ADD followed LONGTEXT DEFAULT NULL, ADD photo VARCHAR(255) DEFAULT NULL, DROP firstName, DROP lastName');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user ADD firstName VARCHAR(180) NOT NULL COLLATE utf8mb4_unicode_ci, ADD lastName VARCHAR(180) NOT NULL COLLATE utf8mb4_unicode_ci, DROP last_name, DROP first_name, DROP short_info, DROP add_date, DROP born_date, DROP friend, DROP feeds, DROP followers, DROP followed, DROP photo');
    }
}
