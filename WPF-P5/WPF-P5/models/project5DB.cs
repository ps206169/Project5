using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.Configuration;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace WPF_P5.models
{
    public class project5DB
    {
        private MySqlConnection _conn = new MySqlConnection(
          ConfigurationManager.ConnectionStrings["db"].ConnectionString
          );
    }
}
