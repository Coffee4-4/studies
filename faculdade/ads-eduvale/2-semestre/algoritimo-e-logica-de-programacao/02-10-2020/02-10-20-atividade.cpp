#include <iostream>
#include <locale.h>
using namespace std;

int main(){
	setlocale(LC_ALL,"Portuguese");
	int num1, num2,resultado;
	char op;
	
	cout <<"Informe o primeiro n�mero: "<<endl;
	cin >> num1;
	cout <<"Informe o segundo n�mero: "<<endl;
	cin >> num2;
	cout <<"Informe a opera��o (+, -, * ou /)";
	cin >>op;
	
	switch(op){
		case '+':
			resultado = num1+num2;
			cout << resultado;
			break;
		case'-':
			resultado = num1-num2;
			cout << resultado;
		break;
		case '*':
			resultado = num1*num2;
			cout << resultado;
		break;
		
		case '/':
			resultado = num1/num2;
		break;
		
		default1:
		cout << "Error.";	
		
	}
	
	return 0;
}
