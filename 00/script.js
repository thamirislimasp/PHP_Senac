class Conta {
    constructor(numero, saldo = 0) {
        this.numero = numero;
        this.saldo = saldo;
    }

    sacar(valor) {
        if(this.saldo >= valor && valor > 0) {
        this.saldo -= valor;
        } else {
            console.log("Saldo insuficiente");
        }
    }

    depositar(valor) {
        if(valor > 0) {
            this.saldo += valor;
        }
    }

    toString() {
        return `Numero: ${this.numero} - Saldo: ${this.saldo}`;
    }
}

class ContaCorrente extends Conta {
    constructor(numero, saldo = 0, limiteChequeEspecial = 200) {
        super(numero, saldo);
        this.limiteChequeEspecial = limiteChequeEspecial;
    }

    sacar(valor) {
        //super.sacar(valor);
        const valorDisponivelSaque = this.saldo + this.limiteChequeEspecial;

        if(valor > 0 && valorDisponivelSaque >= valor) {
            this.saldo -= valor;
        } else {
            console.log("Saldo insuficiente");
        }
    }
}

class ContaPoupanca extends Conta{
    // crie o construtor da conta poupança, com uma propriedade taxaRendimento
    // a taxa é por parão 0.2
    // crie uma função aplicarRendimento() que não precisa fazer nada por hora
    constructor(numero, saldo = 0, taxaRendimento = 0.2) {
        super(numero, saldo);
        this.taxaRendimento = taxaRendimento;
    }

    aplicarRendimento() {
        console.log("Rendimento Aplicado");
    }
}

let contaC = new ContaCorrente(2001, 500);
let contaP = new ContaCorrente(2002, 500);

console.log(contaC.toString());
contaC.sacar(650);
console.log(contaC.toString());


contaP.aplicarRendimento();
//contaC.aplicarRendimento(); # erro por não existir função nessa classe