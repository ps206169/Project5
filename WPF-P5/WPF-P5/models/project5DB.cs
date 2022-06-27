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
        private MySqlConnection _conn = new MySqlConnection(
          ConfigurationManager.ConnectionStrings["db"].ConnectionString
          );

        public List<SportData> GetSportDatas()
        {
            List<SportData> totaal = new List<SportData>();
            try
            {
                _conn.Open();
                MySqlCommand sql = _conn.CreateCommand();
                sql.CommandText =
                    @"SELECT  id, nameNL, nameEN
                    FROM oefeningen
                    ";
                MySqlDataReader reader = sql.ExecuteReader();

                while(reader.Read())
                {
                    SportData sportdata = new SportData()
                    {
                        ID= (ulong)reader["id"],
                        Namenl = (string)reader["nameNL"],
                        Name_en = (string)reader["nameEN"]
                    };

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
                if(_conn.State == System.Data.ConnectionState.Open)
                {
                    _conn.Close();
                }
            }
            return totaal;
        }   
    }
}
