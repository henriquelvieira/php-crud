CREATE TABLE T_CLIENTE (
    CLIENTE_ID          INT NOT NULL AUTO_INCREMENT,
    CLIENTE_NOME        VARCHAR(250) NOT NULL,
    CLIENTE_DT_NASC     DATE         NOT NULL,
    CLIENTE_SEXO        VARCHAR(1)   NOT NULL,
    CLIENTE_CEP         VARCHAR(8)   DEFAULT NULL,
    CLIENTE_ENDERECO    VARCHAR(250) DEFAULT NULL,
    CLIENTE_NUMERO      INT          DEFAULT NULL,
    CLIENTE_COMPLEMENTO VARCHAR(100) DEFAULT NULL,
    CLIENTE_BAIRRO      VARCHAR(150) DEFAULT NULL,
    CLIENTE_UF          VARCHAR(2)   DEFAULT NULL,
    CLIENTE_CIDADE      VARCHAR(150) DEFAULT NULL,
    CLIENTE_DT_CREATED  DATETIME     DEFAULT CURRENT_TIMESTAMP,
    CLIENTE_DT_MODIFIED DATETIME     DEFAULT NULL,
    PRIMARY KEY(CLIENTE_ID)
);