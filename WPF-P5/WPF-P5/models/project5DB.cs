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
    public class Project5DB
    {
        private MySqlConnection _conn = new MySqlConnection("Server=localhost;Database=api_p5;Uid=root;Pwd=;");
          
        public List<SportData> GetSportDatas()
        {
            List<SportData> totaal = new List<SportData>();
            try
            {
                _conn.Open();
                MySqlCommand sql = _conn.CreateCommand();
                sql.CommandText =
                    @"SELECT o.id , o.nameNL,o.nameEN
                      FROM oefeningen o";
                MySqlDataReader reader = sql.ExecuteReader();

                while(reader.Read())
                {


                    SportData sportdata = new SportData();
                    sportdata.ID = (ulong)reader["id"];
                    sportdata.Namenl = (string)reader["nameNL"];
                    sportdata.Name_en = (string)reader["nameEN"];
                    totaal.Add(sportdata);
                }
            }
            catch (Exception e)
            {
                Console.Error.WriteLine(e.Message);
                return null;
            }
            finally
            {
                if(_conn.State == ConnectionState.Open)
                {
                    _conn.Close();
                }
            }
            return totaal;
        }   
    }
}
