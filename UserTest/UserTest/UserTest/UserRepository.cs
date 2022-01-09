using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace UserTest
{
    public class UserRepository
    {
        List<String> users = new List<string>();
        static Object obj;
        String name;


        public void AddUser(String userName)
        {
            name = userName;
            users.Add(name);
        }

        public void GetUser(int id)
        {
            obj = users[id];
        }
    }
}
