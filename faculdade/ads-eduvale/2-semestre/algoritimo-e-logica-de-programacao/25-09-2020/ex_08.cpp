#include <iostream>
#include <locale.h>
using namespace std;

int main(){
	setlocale(LC_ALL, "Portuguese"); //acentua��o pt-br
	int a,b,c;
	cout << "Informe e 1� lado: "<<endl;
	cin >> a;
	cout << "Informe e 2� lado: "<<endl;
	cin >> b;
	cout << "Informe e 3� lado: "<<endl;
	cin >> c;
	
	if((c < b+c) && (b <a+c) && (c < a+b)){
		//cout<<"� um triangulo";
		if((a==b)&&(b==c)){
			cout <<"Tri�ngulo Equil�tero";
		}
		 else if((a==b)||(b==c)||(a==c)){
			cout <<"Tri�ngulo Isosceles";
		}else{
			cout <<"Tri�ngulo Escaleno";
		}
	} else{
		cout << "N�o � poss�vel formar um tri�ngulo";
	}
	
	return 0;
}
