<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220406234849 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lesson DROP FOREIGN KEY FK_F87474F339B39493');
        $this->addSql('DROP TABLE lesson_complete');
        $this->addSql('DROP INDEX IDX_F87474F339B39493 ON lesson');
        $this->addSql('ALTER TABLE lesson DROP complete_lesson_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE lesson_complete (id INT SERIAL NOT NULL, user_id INT DEFAULT NULL, INDEX IDX_A209A3AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE lesson_complete ADD CONSTRAINT FK_A209A3AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE lesson ADD complete_lesson_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE lesson ADD CONSTRAINT FK_F87474F339B39493 FOREIGN KEY (complete_lesson_id) REFERENCES lesson_complete (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_F87474F339B39493 ON lesson (complete_lesson_id)');
    }
}
