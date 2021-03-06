<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220125132055 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE stagiaire ADD cin_enc_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE stagiaire ADD CONSTRAINT FK_4F62F731F7CED827 FOREIGN KEY (cin_enc_id) REFERENCES encadrant (id)');
        $this->addSql('CREATE INDEX IDX_4F62F731F7CED827 ON stagiaire (cin_enc_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE stagiaire DROP FOREIGN KEY FK_4F62F731F7CED827');
        $this->addSql('DROP INDEX IDX_4F62F731F7CED827 ON stagiaire');
        $this->addSql('ALTER TABLE stagiaire DROP cin_enc_id');
    }
}
