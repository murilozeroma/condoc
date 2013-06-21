/*
 * 1) Crie uma classe chamada Ret�ngulo que representa a forma geom�trica.
 *    Essa classe deve ter os atributos altura e largura, 
 *    ambos com o valor padr�o igual a 1.
 *    A classe deve ter tamb�m m�todos para calcular o per�metro e a �rea do ret�ngulo.
 *    Escreva tamb�m m�todos get e set para ambos os atributos.
 *    Os m�todos set devem verificar os valores (ponto flutuante) maiores que zero e menores ou iguais a 20.
 *    Escreva um programa para testar sua classe Ret�ngulo.
 * */

public  class TrianguloEquilatero extends Poligonos{

	
	
	public TrianguloEquilatero(int numeroLados, double base, double altura) {
		super(numeroLados, base, altura);
		// TODO Auto-generated constructor stub
	}

	
	public double calculaPerimetro(double base, double altura) {

		double perimetro;

		base = super.getBase();

		perimetro = 3 * base;

		return perimetro;

	}

	
	public double calculaArea( double base, double altura) {
		
		double area;
		
		base = super.getBase();
		altura = super.getAltura();
		area = (Math.pow(base, 2) + Math.sqrt(3.0))/4;

		return area;
	}


	

}
