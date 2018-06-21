<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180621171214 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE jobs (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(64) NOT NULL, description LONGTEXT NOT NULL, available_seats INT NOT NULL, category VARCHAR(32) NOT NULL, salary INT NOT NULL, contract_type VARCHAR(3) NOT NULL, contract_duration INT NOT NULL, rank VARCHAR(32) NOT NULL, rank_description VARCHAR(255) NOT NULL, prerequisite_temper VARCHAR(255) NOT NULL, prerequisite_age VARCHAR(255) NOT NULL, prerequisite_education VARCHAR(255) NOT NULL, caracteristics_action INT NOT NULL, caracteristics_leadership INT NOT NULL, caracteristics_analytic INT NOT NULL, caracteristics_technophile INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE jobs');
    }
}
