<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210416130351 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE global_rankings');
        $this->addSql('ALTER TABLE global_ranking CHANGE rank rank INT DEFAULT NULL, CHANGE prev_rank prev_rank INT DEFAULT NULL, CHANGE name name VARCHAR(255) DEFAULT NULL, CHANGE league league VARCHAR(255) DEFAULT NULL, CHANGE off off NUMERIC(10, 0) DEFAULT NULL, CHANGE def def NUMERIC(10, 0) DEFAULT NULL, CHANGE spi spi NUMERIC(10, 0) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE global_rankings (rank INT DEFAULT NULL, prev_rank VARCHAR(3) CHARACTER SET utf8 DEFAULT \'NULL\' COLLATE `utf8_general_ci`, name VARCHAR(35) CHARACTER SET utf8 DEFAULT \'NULL\' COLLATE `utf8_general_ci`, league VARCHAR(40) CHARACTER SET utf8 DEFAULT \'NULL\' COLLATE `utf8_general_ci`, off NUMERIC(3, 2) DEFAULT \'NULL\', def NUMERIC(3, 2) DEFAULT \'NULL\', spi NUMERIC(4, 2) DEFAULT \'NULL\') DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE global_ranking CHANGE rank rank INT DEFAULT NULL, CHANGE prev_rank prev_rank INT DEFAULT NULL, CHANGE name name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE league league VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE off off NUMERIC(10, 0) DEFAULT \'NULL\', CHANGE def def NUMERIC(10, 0) DEFAULT \'NULL\', CHANGE spi spi NUMERIC(10, 0) DEFAULT \'NULL\'');
    }
}
