#include <iostream>
#include <locale.h>
using namespace std;

int main(){
	setlocale(LC_ALL, "Portuguese"); //acentuação pt-br
	int a,b,c;
	cout << "Informe e 1º lado: "<<endl;
	cin >> a;
	cout << "Informe e 2º lado: "<<endl;
	cin >> b;
	cout << "Informe e 3º lado: "<<endl;
	cin >> c;
	
	if((c < b+c) && (b <a+c) && (c < a+b)){
		//cout<<"É um triangulo";
		if((a==b)&&(b==c)){
			cout <<"Triângulo Equilátero";
		}
		 else if((a==b)||(b==c)||(a==c)){
			cout <<"Triângulo Isosceles";
		}else{
			cout <<"TriÂngulo Escaleno";
		}
	} else{
		cout << "Não é possível formar um triângulo";
	}
	
	return 0;
}
