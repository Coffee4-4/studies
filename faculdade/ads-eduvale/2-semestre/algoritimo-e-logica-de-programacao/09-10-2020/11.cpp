#include <iostream>
#include <locale.h>
using namespace std;

int main(){
	setlocale(LC_ALL, "Portuguese");
	int i,n,qt;
	
	cout <<"Digite o número de alunos:"<< endl;
	cin >> qt;
	for(i=1;i<=qt;i++){
	cout << "Digite a nota do aluno: " << endl;
	cin >>n;
	n=n+n;
}
	n=n/qt;
	cout<< "A média aritmética entre notas digitados é "<< n ;
	

			
	return 0;
}

