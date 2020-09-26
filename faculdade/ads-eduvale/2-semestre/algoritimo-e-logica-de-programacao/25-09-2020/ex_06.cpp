#include <iostream>
#include <locale.h>
using namespace std;

int main(){
	setlocale(LC_ALL, "Portuguese"); //acentuação pt-br
	int idade;
	
	cout << "Informe sua idade:" << endl;
	cin >> idade;
	//scanf("%d", &idade);
	cout << "Sua idade é " << idade<< " anos.";
	
	return 0;
}
