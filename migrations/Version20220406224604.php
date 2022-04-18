<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220406224604 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lesson ADD complete_lesson_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE lesson ADD CONSTRAINT FK_F87474F339B39493 FOREIGN KEY (complete_lesson_id) REFERENCES lesson_complete (id)');
        $this->addSql('CREATE INDEX IDX_F87474F339B39493 ON lesson (complete_lesson_id)');
        $this->addSql('ALTER TABLE lesson_complete DROP FOREIGN KEY FK_A209A3ACDF80196');
        $this->addSql('DROP INDEX UNIQ_A209A3ACDF80196 ON lesson_complete');
        $this->addSql('ALTER TABLE lesson_complete DROP lesson_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lesson DROP FOREIGN KEY FK_F87474F339B39493');
        $this->addSql('DROP INDEX IDX_F87474F339B39493 ON lesson');
        $this->addSql('ALTER TABLE lesson DROP complete_lesson_id');
        $this->addSql('ALTER TABLE lesson_complete ADD lesson_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE lesson_complete ADD CONSTRAINT FK_A209A3ACDF80196 FOREIGN KEY (lesson_id) REFERENCES lesson (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A209A3ACDF80196 ON lesson_complete (lesson_id)');
    }
}
