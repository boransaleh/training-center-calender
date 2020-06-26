<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171103170606 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE freitagstandort');
        $this->addSql('ALTER TABLE freitag ADD gultig TINYINT(1) NOT NULL, DROP wochen_tag_nr, CHANGE freitag_datum freitag_datum DATETIME NOT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE freitagstandort (id INT AUTO_INCREMENT NOT NULL, stand_ort_id INT NOT NULL, freitag_id INT NOT NULL, gultig TINYINT(1) NOT NULL, INDEX IDX_B8D473864AAF93B4 (stand_ort_id), INDEX IDX_B8D473866C139249 (freitag_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE freitagstandort ADD CONSTRAINT FK_B8D473864AAF93B4 FOREIGN KEY (stand_ort_id) REFERENCES standort (id)');
        $this->addSql('ALTER TABLE freitagstandort ADD CONSTRAINT FK_B8D473866C139249 FOREIGN KEY (freitag_id) REFERENCES freitag (id)');
        $this->addSql('ALTER TABLE Freitag ADD wochen_tag_nr INT NOT NULL, DROP gultig, CHANGE freitag_datum freitag_datum DATE NOT NULL');
    }
}
