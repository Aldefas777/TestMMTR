using System;
using UserTest;

namespace User
{
    class Program
    {
        string UserName = Console.ReadLine();
        static void AddUser(String UserName)
        {
            UserRepository.AddUser(UserName);
        }
    }
}

