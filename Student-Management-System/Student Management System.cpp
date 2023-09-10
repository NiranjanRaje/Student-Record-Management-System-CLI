#include <iostream>
#include <string>
#include<stdlib.h>
#include<conio.h>
#include<string.h>
#include <iostream>
#include <fstream>
#include <string>

using namespace std;

struct node {
    string first_name;
    string last_name;
    //int roll_number;
    string roll_number;
    string branch;
    //int year;
    string year;
    node* next;
};
int number_of_students=0;



using namespace std;

struct User {
    string username;
    string password;
    string role;
};




class Student {
    private:
        node* head,*last;
        char firstName[20], lastName[20], branch[20], rollNo[10],year[20];
    public:
        Student() {
            head = NULL;
        }
        void printLabel()
        {
        	cout<<"\n \t\t\t\t \xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd";
        	cout<<"\n\t\t\t\t|      Enter the new student details      |";
        	cout<<"\n \t\t\t\t \xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd";
		}

        void addStudent()
        {
        	
        	system("cls");
        	printLabel();
        	//cout<<"\n \t\t\t\t \xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd";
        	//cout<<"\n\t\t\t\t|      Enter the new student details      |";
        	//cout<<"\n \t\t\t\t \xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd";
            //char firstName[20], lastName[20], branch[20], rollNo[10],year[20];
            //int rollNo, year;
            int error;
            
            	do
            	{
            	  error = 0;
            	  cout<<"\n\t\t\t\tEnter the first name of the student\n\t\t\t\t";
           		  cin >> firstName;
           		  for (int i = 0; i < strlen(firstName); i++) 
				  {
      				 if(isdigit(firstName[i]))
      				 {
      				 	system("cls");
      				 	printLabel();
      					cout << "\n\t\t\tPlease enter a valid first name which does not contain any number" << endl;
        			    error = 1;
        			    break;	
					 }
   				  }
				}while(error == 1);
				
				do
            	{
            		error = 0;
            	    cout<<"\n\t\t\t\tEnter the last name of the student\n\t\t\t\t";
           		    cin >> lastName;
           		  for (int i = 0; i < strlen(lastName); i++) 
				  {
      				if(isdigit(lastName[i]))
      				{
      					system("cls");
      					printLabel();
      					cout << "\n\t\t\tPlease enter a valid last name which does not contain any number" << endl;
        			    error = 1;
        			    break;	
					}
   				  }
				}while(error == 1);
				//if(roll=="NULL")
				do
            	{
            		error = 0;
            	    cout<<"\n\t\t\t\tEnter the roll number of the student\n\t\t\t\t";
           		    cin >> rollNo;
           		  for (int i = 0; i < strlen(rollNo); i++)
				  {
      				 if(isdigit(rollNo[i]))
      				 {	
					 }
					 else
					 {
					 	system("cls");
					 	printLabel();
					   cout << "\n\t\t\tPlease enter a valid roll no " << endl;
        			   error = 1;
        			   break;
					}
  				  }
				}while(error == 1);
				
				do
            	{
            		error = 0;
            	    cout<<"\n\t\t\t\tEnter the branch of the student\n\t\t\t\t";
            	    cin >> branch;
            	  for (int i = 0; i < strlen(branch); i++)
				  {
      				 if(isdigit(branch[i]))
      				 {
      				 	system("cls");
      				 	printLabel();
      					cout << "\n\t\t\tPlease enter a valid branch which does not contain any number" << endl;
        			    error = 1;	
        			    break;
					 }
  				  }
				}while(error == 1);
				
				do
            	{
            		error = 0;
            	    cout<<"\n\t\t\t\tEnter the year of the student\n\t\t\t\t";
            	    cin >> year;
            	  for (int i = 0; i < strlen(year); i++)
				  {
      				 if(isdigit(year[i]))
      				{	
					}
					else
					{
					  system("cls");
					  printLabel();
					  cout << "\n\t\tPlease enter a valid year " << endl;
        			  error = 1;
        			  break;
					}
  				  }
				}while(error == 1);
				
				
            	
            	 //cout<<"\n\t\t\t\tEnter the first name of the student\n\t\t\t\t";
           		 //cin >> firstName;
           		 //cout<<"\n\t\t\t\tEnter the last name of the student\n\t\t\t\t";
           		 //cin >> lastName;
           		 //cout<<"\n\t\t\t\tEnter the roll number of the student\n\t\t\t\t";
           		 //cin >> rollNo;
            	 //cout<<"\n\t\t\t\tEnter the branch of the student\n\t\t\t\t";
            	 //cin >> branch;
           	 	 //cout<<"\n\t\t\t\tEnter the year of the student\n\t\t\t\t";
            	 //cin >> year;
            	 struct node *temp=head;
            	  while (temp != NULL) {
                if (temp->roll_number == rollNo) {
                    
                   cout<<"Roll No already exists ";
                   return;
                }
                temp = temp->next;
            }
            	
            temp = new node;
            temp->first_name = firstName;
            temp->last_name = lastName;
            temp->roll_number =rollNo;
            temp->branch = branch;
            temp->year = year;
            temp->next=NULL;
            if(head==NULL)
            {
            	head=temp;
            	head->next=NULL;
			}
			else
			{
				last=head;
				while(last->next!=NULL)
				{
					last=last->next;
				}
				last->next=temp;
			}
            cout<<"\n\t\t\t\t____________DATA ADDED__________\n";
			 cout<<"\t\t\t\t____________PRESS ANY KEY__________\n";
			 getch();
			 number_of_students++;
        }

        void deleteStudent() {
            //int rollNo;
            //string rollNo;
            system("cls");
            cout << "\t\t\t\tEnter roll no of student to delete:\n\t\t\t\t ";
            cin >> rollNo;
			

            node* temp = head;
            node* prev = NULL;
            while (temp != NULL) {
                if (temp->roll_number == rollNo) {
                	cout<<"deleted";
                    if (prev == NULL) {
                        head = temp->next;
                    } else {
                        prev->next = temp->next;
                    }
                    delete temp;
                    number_of_students--;
                    getch();
                    return;
                }
                prev = temp;
                temp = temp->next;
            }
            cout << "\n\t\t\t\tStudent not found" << endl;
        }

        void updateStudent() {
            //int rollNo;
            char rollNo[10];
            system("cls");
            cout << "\t\t\t\tEnter roll no of student to update:\n\t\t\t\t ";
            cin >> rollNo;

            node* temp = head;
            while (temp != NULL) {
                if (temp->roll_number == rollNo) {
                	int error = 0;
                   do
            	   {
            	    int error = 0;
            	     cout<<"\n\t\t\t\tEnter new first name of the student\n\t\t\t\t";
           		     cin >> firstName;
           		     for (int i = 0; i < strlen(firstName); i++) 
				     {
      				    if(isdigit(firstName[i]))
      				    {
      				 	   system("cls");
      					   cout << "\n\t\t\t\tPlease enter a valid first name which does not contain any number" << endl;
        			       error = 1;
        			       break;	
					    }
   				     }
				   }while(error == 1);
				   
                    do
            	   {
            		 int error = 0;
            	     cout<<"\n\t\t\t\tEnter the last name of the student\n\t\t\t\t";
           		     cin >> lastName;
           		     for (int i = 0; i < strlen(lastName); i++) 
				      {
      				    if(isdigit(lastName[i]))
      				    {
      					   system("cls");
      					   cout << "\n\t\t\t\tPlease enter a valid last name which does not contain any number" << endl;
        			       error = 1;
        			       break;	
					    }
   				      }
				    }while(error == 1);
				    
					do
                	{
            		 int error = 0;
            	     cout<<"\n\t\t\t\tEnter the branch of the student\n\t\t\t\t";
            	     cin >> branch;
            	     for (int i = 0; i < strlen(branch); i++)
				      {
      				    if(isdigit(branch[i]))
      				    {
      				 	   system("cls");
      					   cout << "\n\t\t\t\tPlease enter a valid branch which does not contain any number" << endl;
        			       error = 1;	
        			       break;
					    }
  				      }
				    }while(error == 1);
				    
                    do
                	{
            		 int error = 0;
            	     cout<<"\n\t\t\t\tEnter the year of the student\n\t\t\t\t";
            	     cin >> year;
            	     for (int i = 0; i < strlen(year); i++)
				      {
      				    if(isdigit(year[i]))
      				    {	
					    }
					    else
					    {
					      system("cls");
					      cout << "\n\t\t\t\tPlease enter a valid year " << endl;
        			      error = 1;
        			      break;
					    }
  				      }
			  	    }while(error == 1);
			  	    
			temp->first_name = firstName;
            temp->last_name = lastName;
            temp->roll_number =rollNo;
            temp->branch = branch;
            temp->year = year;
                    return;
                }
                temp = temp->next;
            }
            cout << "\n\t\t\t\tStudent not found" << endl;
        }

        void showAllStudents() {
           struct node* temp = head;
            system("cls");
            printLabel();
            cout<<"\n\t\t\tROLL NO \t FIRST NAME \t LAST NAME \t YEAR  \t BRANCH";
        
            while (temp!= NULL) {
            
            		cout<<"\n\t\t\t"<<temp->roll_number<<"\t\t"<<temp->first_name<<"\t\t"<<temp->last_name<<"\t\t"<<temp->year<<"\t\ts"<<temp->branch;
                temp = temp->next;
            }
            cout<<"\n\t\t\t\t____________PRESS ANY KEY__________\n";
			getch();
        }

        void searchStudentById() {
            //int rollNo;
            string rollNo;
            system("cls");
            cout << "\t\t\t\tEnter roll no of student to search:\n\t\t\t\t ";
            cin >> rollNo;

            node* temp = head;
            while (temp != NULL) {
                if (temp->roll_number == rollNo) {
                    cout<<"\n"<<temp->roll_number<<"\t"<<temp->first_name<<temp->last_name<<"\t"<<temp->year<<"\t"<<temp->branch;
                    cout<<"\n\t\t\t\t____________PRESS ANY KEY__________\n";
					getch();
                    return;
                }
                temp = temp->next;
            }
            cout << "\n \t\t\t\tStudent not found" << endl;
            cout<<"\n\t\t\t\t____________PRESS ANY KEY__________\n";
			getch();
        }
        
        void searchStudentByFirstName() {
             string firstName;
             system("cls");
            cout << "\t\t\t\tEnter name of student to search:\n\t\t\t\t ";
            cin >>firstName;
            node* temp = head;
            while (temp != NULL) {
                if (temp->first_name == firstName) {
                    cout<<"\n"<<temp->roll_number<<"\t"<<temp->first_name<<temp->last_name<<"\t"<<temp->year<<"\t"<<temp->branch;
                    cout<<"\n\t\t\t\t____________PRESS ANY KEY__________\n";
					getch();
                    return;
                }
                temp = temp->next;
            }
            cout << "\n\t\t\t\tStudent not found" << endl;
            cout<<"\n\t\t\t\t____________PRESS ANY KEY__________\n";
			getch();
        }
        
        void searchStudentByYear() {
             //int year;
             string year;
             system("cls");
            cout << "\t\t\t\tEnter year of student to search:\n\t\t\t\t ";
            cin >> year;
            node* temp = head;
            while (temp != NULL) {
                if (temp->year == year) {
                    cout<<"\n"<<temp->roll_number<<"\t"<<temp->first_name<<temp->last_name<<"\t"<<temp->year<<"\t"<<temp->branch;
                    cout<<"\n\t\t\t\t____________PRESS ANY KEY__________\n";
					getch();
                    return;
                }
                temp = temp->next;
            }
            cout << "\t\t\t\tStudent not found" << endl;
            cout<<"\n\t\t\t\t____________PRESS ANY KEY__________\n";
			getch();
        }
        
        void findTotalStudents()
		{
		  system("cls");
		  cout<<"\t\t\t\tThe total number Students are "<< number_of_students <<"\n";
		  cout<<"\n\t\t\t\t____________PRESS ANY KEY__________\n";
		  getch();
	    }
};


















class manage : public Student
{
	public:
void registerUser(string username, string password,string role) {
    User newUser;
    newUser.username = username;
    newUser.password = password;
    newUser.role = role;

    ofstream outfile;
    outfile.open("users.txt", ios::app); 
    outfile << newUser.username << "," << newUser.password <<","<<newUser.role<< endl;
    outfile.close();

    cout << "Registration successful!" << endl;
}

bool login(string username, string password,string role) {
    User user;
    ifstream infile;
    infile.open("users.txt");

    while (infile >> user.username ) {
        if (user.username == username+"," +password +","+role) {
            cout << "Login successful!" << endl;
            return true;
        }
    }
    
    cout << "Incorrect username or password." << endl;
    return false;
}

void menu(string role) {
    string choice, password;
    char username[20];
    int f=0;
    while (true) {
        cout << "1. Register" << endl;
        cout << "2. Login" << endl;
        cout << "3. Exit" << endl;
        cout << "Enter your choice: ";
        cin >> choice;

        if (choice == "1") {
            cout << "Enter a username: ";
            cin >> username;
            cout << "Enter a password: ";
            cin >> password;
            registerUser(username, password,role);
        } else if (choice == "2") {
            cout << "Enter your username: ";
            cin >> username;
            cout << "Enter your password: ";
            cin >> password;
           f= login(username, password,role);
           if(f==1 && role=="student")
           studentMenu(username);
           else if(f==1 && role=="admin")
           {
           	adminMenu();
		   }
           
           
          // adminMenu();
        } 
		else if (choice == "3") 
		{
            break;
        } else
		 {
            cout << "Invalid choice. Please try again." << endl;
        }
    }
    cout << "Incorrect username or password." << endl;

}
void studentMenu(char rollNo[])
{
        
    int choice;
    while (true) {
    	system("cls");
    	cout<<"\n \t\t\t\t \xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd";
        cout<<"\n \t\t\t\t |-- STUDENT RECORD MANAGEMENT SYSTEM --|";
        cout<<"\n \t\t\t\t \xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\n";
        
        cout<<"\t\t\t\t|  1. Add Details                             |\n";
               
        cout<<"\t\t\t\t|  2. Update Details                          |\n";
               
        cout<<"\t\t\t\t|  3. show list                               |\n";
               
        cout<<"\t\t\t\t|  4. Exit the program                        |\n";
        cout<<"\n \t\t\t\t \xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd";
        
        cout<<"\n\t\t\t\tEnter your choice  ";
        cin>>choice;
        
        switch (choice) {
        case 1:
            addStudent();
            break;
            
        case 2:
        	updateStudent();
            break;
            
        case 3:
        	showAllStudents();
            break;
            
        case 4:
        	return;
            break;
        }
    }

}
void adminMenu()
{
        
    int choice;
    while (true) {
    	system("cls");
    	cout<<"\n  \xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd";
        cout<<"\n  |-- STUDENT RECORD MANAGEMENT SYSTEM --|";
        cout<<"\n  \xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\n";
        
        cout<<"1. Add new Student to the database\n";
        
        cout<<"2. Show All Student Information\n";
        
        cout<<"3. Search Student by Roll Number\n";
               
        cout<<"4. Search Student by First Name\n";
               
        cout<<"5. Search Student by Year \n";
               
        cout<<"6. Count Total number of Students\n";
               
        cout<<"7. Delete the Student by Roll Number\n";
               
        cout<<"8. Update Student Details by Roll Number\n";
               
        cout<<"9. Exit the program\n";
        
        cout<<"Enter your choice\n";
        cin>>choice;
        
        switch (choice) {
        case 1:
            addStudent();
            break;
            
        case 2:
            showAllStudents();
            break;
            
        case 3:
            searchStudentById();
            break;
            
        case 4:
            searchStudentByFirstName();
            break;
            
        case 5:
            searchStudentByYear();
            break;
            
        case 6:
            findTotalStudents();
            break;
            
        case 7:
            deleteStudent();
            break;
            
        case 8:
            updateStudent();
            break;
            
        case 9:
            return;
            break;
        }
    }

}
};

int main() {
    Student s;
    manage m;
        
    int choice;
    while (true) {
    	system("cls");
    	cout<<"\n \t\t\t\t \xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd";
        cout<<"\n \t\t\t\t |-- STUDENT RECORD MANAGEMENT SYSTEM --|";
        cout<<"\n \t\t\t\t \xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\n";
        
        cout<<"\t\t\t\t|  1. Admin             |\n";
        
        cout<<"\t\t\t\t|  2. Student           |\n";
               
        cout<<"\t\t\t\t|  3. Exit the program                       |\n";
        cout<<"\n \t\t\t\t \xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd\xcd";
        
        cout<<"\n\t\t\t\tEnter your choice  ";
        cin>>choice;
        
        switch (choice) {
        case 1:
              m.menu("admin");
            break;
            
        case 2:
            m.menu("student");
            break;
            
        case 3:
            exit(0);
            break;
            
        }
    }
return 0;
}












