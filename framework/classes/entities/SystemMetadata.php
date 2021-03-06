<?php
namespace CASHMusic\Entities;


use Doctrine\ORM\Mapping as ORM;

/**
 * SystemMetadata
 *
 * @Table(name="system_metadata", indexes={@Index(name="system_metadata_scope_table", columns={"scope_table_alias", "scope_table_id"})})
 * @Entity
 */
class SystemMetadata extends EntityBase
{

    protected $fillable;
    /**
     * @var string
     *
     * @Column(name="scope_table_alias", type="string", length=255, nullable=false)
     */
    protected $scopeTableAlias = '';

    /**
     * @var integer
     *
     * @Column(name="scope_table_id", type="integer", nullable=false)
     */
    protected $scopeTableId = '0';

    /**
     * @var integer
     *
     * @Column(name="user_id", type="integer", nullable=false)
     */
    protected $userId = '0';

    /**
     * @var string
     *
     * @Column(name="type", type="string", length=255, nullable=true)
     */
    protected $type;

    /**
     * @var string
     *
     * @Column(name="value", type="text", length=65535, nullable=false)
     */
    protected $value;

    /**
     * @var integer
     *
     * @Column(name="creation_date", type="integer", nullable=true)
     */
    protected $creationDate;

    /**
     * @var integer
     *
     * @Column(name="modification_date", type="integer", nullable=true)
     */
    protected $modificationDate;

    /** @Id @Column(type="integer") @GeneratedValue(strategy="AUTO") **/
    protected $id;

}

