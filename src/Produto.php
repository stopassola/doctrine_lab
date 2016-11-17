<?php
/**
 * Produto
 *
 * @Entity
 * @Table(name="produtos")
 */
class Produto
{
    /**
     * @var integer
     *
     * @Column(name="codigo", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var string
     *
     * @Column(name="nome", type="string", length=250, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @Column(name="descricao", type="text", length=65535, nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @Column(name="preco", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $preco;

    /**
     * @var string
     *
     * @Column(name="peso", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $peso;
    
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($text)
    {
        $this->nome = $text;
    }
    
    public function getId()
    {
        return $this->codigo;
    }
}

