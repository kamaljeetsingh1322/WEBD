#include<iostream>
#include<fstream>
#include<cctype>
#include<iomanip>
using namespace std;
class account
{
	int no;
	char name[50];
	int deposit;
	char type;
public:
	void createAcc()
	{
        system("CLS");
        cout<<"\n\t\t\tEnter the Account No. : ";
        cin>>no;
        cout<<"\n\n\t\t\tEnter the Name of the Account holder : ";
        cin.ignore();
        cin.getline(name,50);
        cout<<"\n\t\t\tEnter Type of the Account (C/S) : ";
        cin>>type;
        type=toupper(type);
        cout<<"\n\t\t\tEnter The Initial amount : ";
        cin>>deposit;
        cout<<"\n\n\t\t\tAccount Created..";
    }
	void show_account() const
	{
        cout<<"\n\t\t\tAccount No. : "<<no;
        cout<<"\n\t\t\tAccount Holder Name : ";
        cout<<name;
        cout<<"\n\t\t\tType of Account : "<<type;
        cout<<"\n\t\t\tBalance amount : "<<deposit;
    }
	void modify()
	{
        cout<<"\n\t\t\tAccount No. : "<<no;
        cout<<"\n\t\t\tModify Account Holder Name : ";
        cin.ignore();
        cin.getline(name,50);
        cout<<"\n\t\t\tModify Type of Account : ";
        cin>>type;
        type=toupper(type);
        cout<<"\n\t\t\tModify Balance amount : ";
        cin>>deposit;
    }
	void dep(int x)
	{
        deposit+=x;
    }
	void draw(int x)
    {
        deposit-=x;
    }
	void all() const
	{
        cout<<no<<setw(10)<<" "<<name<<setw(10)<<" "<<type<<setw(6)<<deposit<<endl;
    }
	int ret_no() const
	{
        return no;
    }
	int retdeposit() const
	{
        return deposit;
	}
	char rettype() const
	{
        return type;
    }
};
void newAcc()
{
	account obj;
	ofstream writeF;
	writeF.open("account.txt",ios::binary|ios::app);
	obj.createAcc();
	writeF.write(reinterpret_cast<char *> (&obj), sizeof(account));
	writeF.close();
}

void display_one(int n)   //BALANCE ENQUIRY
{
	account obj;
	bool i=false;
	ifstream readF;
	readF.open("account.txt",ios::binary);
	if(!readF)
	{
		cout<<"File could not be open !! Press any Key...";
		return;
	}
	cout<<"\n\t\t\tBALANCE DETAILS\n";
    	while(readF.read(reinterpret_cast<char *> (&obj), sizeof(account)))
	{
		if(obj.ret_no()==n)
		{
			obj.show_account();
			i=true;
		}
	}
    readF.close();
	if(i==false)
		cout<<"\n\n\t\t\tAccount number does not exist";
}
void modify_acc(int n)
{
	bool found=false;
	account ac;
	fstream File;
    File.open("account.txt",ios::binary|ios::in|ios::out);
	if(!File)
	{
		cout<<"File could not be open !! Press any Key...";
		return;
	}
	while(!File.eof() && found==false)
	{
		File.read(reinterpret_cast<char *> (&ac), sizeof(account));
		if(ac.ret_no()==n)
		{
			ac.show_account();
			cout<<"\n\n\t\t\tEnter The New Details of account"<<endl;
			ac.modify();
			int pos=(-1)*static_cast<int>(sizeof(account));
			File.seekp(pos,ios::cur);
		    File.write(reinterpret_cast<char *> (&ac), sizeof(account));
		    cout<<"\n\n\t\t\tRecord Updated";
		    found=true;
		  }
	}
	File.close();
	if(found==false)
		cout<<"\n\n\t\t\tRecord Not Found ";
}
void delete_acc(int n)
{
	account obj;
	ifstream inFile;
	ofstream outFile;
	inFile.open("account.txt",ios::binary);
	if(!inFile)
	{
		cout<<"File could not be open !! Press any Key...";
		return;
	}
	outFile.open("Temp.txt",ios::binary);
	inFile.seekg(0,ios::beg);
	while(inFile.read(reinterpret_cast<char *> (&obj), sizeof(account)))
	{
		if(obj.ret_no()!=n)
			outFile.write(reinterpret_cast<char *> (&obj), sizeof(account));
	}
    inFile.close();
	outFile.close();
	remove("account.txt");
	rename("Temp.txt","account.txt");
	cout<<"\n\nRecord Deleted ..";
}
void display_all()
{
	system("CLS");
	account obj;
	ifstream readF;
	readF.open("account.txt",ios::binary);
	if(!readF)
	{
		cout<<"File could not be open !! Press any Key...";
		return;
	}
	cout<<"\n\n\t\tACCOUNT HOLDER LIST\n\n";
	cout<<"====================================================\n";
	cout<<"A/c no.      NAME           Type  Balance\n";
	cout<<"====================================================\n";
	while(readF.read(reinterpret_cast<char *> (&obj), sizeof(account)))
		obj.all();
	readF.close();
}
void balance(int n, int option)
{
	int amt;
	bool i=false;
	account obj;
	fstream File;
    File.open("account.txt", ios::binary|ios::in|ios::out);
	if(!File)
	{
		cout<<"File could not be open !! Press any Key...";
		return;
	}
	while(!File.eof() && i==false)
	{
		File.read(reinterpret_cast<char *> (&obj), sizeof(account));
		if(obj.ret_no()==n)
		{
			obj.show_account();
			if(option==1)
			{
				cout<<"\n\n\t\t\tTO DEPOSITSS AMOUNT";
				cout<<"\n\n\t\t\tEnter The amount to be deposited: ";
				cin>>amt;
				obj.dep(amt);
			}
		    if(option==2)
			{
				cout<<"\n\n\t\t\tTO WITHDRAW AMOUNT";
				cout<<"\n\n\t\t\tEnter The amount to be withdraw: ";
				cin>>amt;
				int bal=obj.retdeposit()-amt;
				if(bal<0)
					cout<<"Insufficient balance"<<endl;
				else
					obj.draw(amt);
		      }
			int pos=(-1)*static_cast<int>(sizeof(obj));
			File.seekp(pos,ios::cur);
			File.write(reinterpret_cast<char *> (&obj), sizeof(account));
			cout<<"\n\n\t\t\tRecord Updated";
			i=true;
	       }
         }
    File.close();
	if(i==false)
		cout<<"\n\n\t\t\tRecord Not Found ";
}
int main()
{
	char choice;
	int acc;
	do
	{
	system("CLS");
	cout<<"\n\n\t\t\t\t======================\n";
	cout<<"\t\t\t\tBANK MANAGEMENT SYSTEM";
	cout<<"\n\t\t\t\t======================\n";

		cout<<"\t\t\t\t    ::MAIN MENU::\n";
		cout<<"\n\t\t\t\t1. NEW ACCOUNT";
		cout<<"\n\t\t\t\t2. DEPOSIT AMOUNT";
		cout<<"\n\t\t\t\t3. WITHDRAW AMOUNT";
		cout<<"\n\t\t\t\t4. BALANCE ENQUIRY";
		cout<<"\n\t\t\t\t5. ALL ACCOUNT HOLDER LIST";
		cout<<"\n\t\t\t\t6. CLOSE AN ACCOUNT";
		cout<<"\n\t\t\t\t7. MODIFY AN ACCOUNT";
		cout<<"\n\t\t\t\t8. EXIT";
		cout<<"\n\n\t\t\t\tSelect Your Option (1-8): ";
		cin>>choice;

		switch(choice)
		{
            case '1':
                newAcc();
                break;
            case '2':
                system("CLS");
                cout<<"\n\n\t\t\tEnter The account No. : "; cin>>acc;
                balance(acc, 1);
                break;
            case '3':
                system("CLS");
                cout<<"\n\n\t\t\tEnter The account No. : "; cin>>acc;
                balance(acc, 2);
                break;
            case '4':
                system("CLS");
                cout<<"\n\n\t\t\tEnter The account No. : "; cin>>acc;
                display_one(acc);
                break;
            case '5':
                display_all();
                break;
            case '6':
                system("CLS");
                cout<<"\n\n\t\t\tEnter The account No. : "; cin>>acc;
                delete_acc(acc);
                break;
             case '7':
                system("CLS");
                cout<<"\n\n\t\t\tEnter The account No. : "; cin>>acc;
                modify_acc(acc);
                break;
             case '8':
                system("CLS");
                cout<<"\n\n\t\t\tthxs...";
                break;
             default :cout<<"\a";
		}
		cin.ignore();
		cin.get();
    }while(choice!='8');
	return 0;
}
