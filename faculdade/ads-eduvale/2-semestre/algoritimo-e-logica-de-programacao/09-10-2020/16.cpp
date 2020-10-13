#include <iostream>
#include <locale.h>
using namespace std;

int main(){
	setlocale(LC_ALL, "Portuguese");
	int i, n;
	n = 1;
	
	for(i=1; i <= 10; i++){
		cout<<i<<",";
		for(n=1 ;n<=10;n++){
			cout<<n;
		
		}
			
		cout<<endl;
		
	}
	

			
	return 0;
}

