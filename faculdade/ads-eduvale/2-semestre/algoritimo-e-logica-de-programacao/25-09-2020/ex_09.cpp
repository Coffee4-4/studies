#include <iostream>
#include <locale.h>
using namespace std;

int main(){
	setlocale(LC_ALL, "Portuguese"); //acentuação pt-br
	int a,b,c, aux;
	cout << "Informe e 1º valor: "<<endl;
	cin >> a;
	cout << "Informe e 2º valor: "<<endl;
	cin >> b;
	cout << "Informe e 3º valor: "<<endl;
	cin >> c;
	
	if(a>b){
		aux = a;
		a = b;
		b = aux;
		
	}else if(a>c){
		aux = a;
		a = c;
		c = aux;
		
	} else if(b>c){
		aux = b;
		b = c;
		c = aux;
	}
	
	cout << a << b << c;
	
	
	return 0;
}
