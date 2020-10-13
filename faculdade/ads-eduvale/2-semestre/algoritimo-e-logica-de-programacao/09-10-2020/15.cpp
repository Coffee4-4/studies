#include <iostream>
#include <locale.h>
using namespace std;

int main(){
	setlocale(LC_ALL, "Portuguese");
	int i, n;
	
	
	for(i=1; i <= 10; i++){
	
		for(n=1;n<=10;n++){
			cout << i<<" x "<< n <<" = "<< i*n << endl;
		}
		cout<<endl;
	}
	
	
			
	return 0;
}

