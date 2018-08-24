<?php

public class Usuario {
    private $cod;
    private $nome;
    private $email;
    private $dt_nascim;
    private $logradouro;
    private $complemento;
    private $bairro;
    private $cidade;
    private $uf;
    private $cep;
    private $tel_res;
    private $tel_cel;
    
    public function getCod() {
        return $this->cod;
    }
    public function setCod($id) {
        $this->cod = $id;
    }
        public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($em) {
        $this->email = $em;
    }
    public function getDt_nascim() {
        return $this->dt_nascim($dtnascim);
    }
    public function setdDt_nascim($dtnascim) {
        $this->dt_nascim = $dtnascim;
    }
    public function getLogradouro() {
        return $this->logradouro;
    }
    public function setLogradouro($logrado) {
        $this->logradouro = $logrado;
    }
    public function getComplemento() {
        return $this->complemento;
    }
    public function setComplemento($complem) {
        $this->complemento = $complem;
    }
    public function getBairro() {
        return $this->bairro;
    }
    public function setBairro($bairr) {
        $this->bairro = $bairr;
    }
    public function getCidade() {
        return $this->cidade;
    }
    public function setCidade($cidad) {
        $this->cidade = $cidad;
    }
    public function getUf() {
        return $this->uf;
    }
    public function setUf($uf1) {
        $this->uf = $uf1;
    }
    public function getCep() {
        return $this->cep;
    }
    public function setCep($cep1) {
        $this->cep = $cep1;
    }
    public function getTel_res() {
        return $this->tel_res;
    }
    public function setTel_res($telres) {
        $this->tel_res = $telres;
    }
    public function getTel_cel() {
        return $this->tel_cel;
    }
    public function setTel_cel($telcel) {
        $this->tel_cel = $telcel;
    }
    
}