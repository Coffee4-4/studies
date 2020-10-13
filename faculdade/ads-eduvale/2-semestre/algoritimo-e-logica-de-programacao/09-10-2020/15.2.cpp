#include <iostream>
#include <locale.h>
using namespace std;

int main(){
	setlocale(LC_ALL, "Portuguese");
	int i, n, v;
	cout<<"Gostaria de exibir a tabuado no intervalo de 1 até?"<<endl;
	cin>>v;
	
	
	for(i=1; i <= v; i++){
	
		for(n=1;n<=10;n++){
			cout << i<<" x "<< n <<" = "<< i*n << endl;
		}
		cout<<endl;
	}
	
	
			
	return 0;
}

