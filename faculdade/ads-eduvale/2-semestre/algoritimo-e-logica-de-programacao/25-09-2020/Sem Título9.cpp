#include <iostream>
#include <locale.h>
using namespace std;

int main(){
	setlocale(LC_ALL, "Portuguese"); //acentua��o pt-br
	int a,b,c, aux;
	cout << "Informe e 1� valor: "<<endl;
	cin >> a;
	cout << "Informe e 2� valor: "<<endl;
	cin >> b;
	cout << "Informe e 3� valor: "<<endl;
	cin >> c;
	
	if(a<b){
		if(b <c){
			cout << a << b << c;
		}else if(a<c){
			cout << a << c << b;
		}
		else{
			cout << c << a << b;
		}
	}else{
		if(b<c){
			if(a<c){
				cout << b << a << c;
			}
			else{
				cout << b << c << a;
			}
		}
		else{
			cout << c << b << a;
		}
	}
	
	
	return 0;
}
