
/******************************************************************************
 * 1) Modifique o programa da tarefa 1 para que as possíveis exceções sejam   *
 * capturadas e tratadas, evitando a interrupção na execução da calculadora.  *
 *                                                                            * 
 * @author (Murilo Silva Andrade Souza)                                       *
 * @version (0, 10-07-2013)                                                   *
 ******************************************************************************/

import javax.swing.JOptionPane;

public class Calculadora2 {
    public static void main(String args []){
        int i = 1;
        while (i != 0) {
        String firstNumber = 
            JOptionPane.showInputDialog("Digite o primeiro número:");
        String Operator = 
            JOptionPane.showInputDialog("1=Somar,2=Subtrair,3=Dividir, 4=Multiplicar:");
        String secondNumber = 
                JOptionPane.showInputDialog("Digite o segundo número:");
        
        
        float num1 = Integer.parseInt(firstNumber);
        int operador = Integer.parseInt(Operator);
        float num2 = Integer.parseInt(secondNumber);
                       
        switch (operador){
        case 1:
        float sum = num1 + num2; 
         JOptionPane.showMessageDialog(null, "A soma dos valores é: " + sum,
                "Soma de dois números", JOptionPane.PLAIN_MESSAGE);
        break;
        case 2:
        float sub = num1 - num2; 
         JOptionPane.showMessageDialog(null, "A subtração dos valores é: " + sub,
                "Subtração de dois números", JOptionPane.PLAIN_MESSAGE);
        break;
        case 3:
        float div = num1 / num2; 
         JOptionPane.showMessageDialog(null, "A divisão dos valores é: " + div,
                "Divisão de dois números", JOptionPane.PLAIN_MESSAGE);
        break;
        case 4:
        float mut = num1 * num2; 
         JOptionPane.showMessageDialog(null, "A multiplicação dos valores é: " + mut,
                "Multiplicação de dois números", JOptionPane.PLAIN_MESSAGE); 
        break;
        
        default:
        JOptionPane.showMessageDialog(null, "Digite 1 para somar, 2 para subtrair, 3 para dividir e/ou 4 para multiplicar"); 
           
    }
   i++;
}
}

}