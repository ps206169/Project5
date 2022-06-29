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

                while (reader.Read())
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
                if (_conn.State == ConnectionState.Open)
                {
                    _conn.Close();
                }
            }
            return totaal;
        }
        public bool UpdateOefeningen(SportData sportData)
        {
            bool result = false;
            try
            {
                _conn.Open();
                MySqlCommand sql = _conn.CreateCommand();
                sql.CommandText = @"UPDATE `oefeningen` SET `id`= @id, WHERE `oefeningen`. `id`=@id";

                sql.Parameters.AddWithValue("@id", sportData.ID);


            }
            catch (Exception e)
            {
                Console.Error.WriteLine(e.Message);
                return false;
            }
            finally
            {
                if (_conn.State == ConnectionState.Open)
                {
                    _conn.Close();
                }
            }

            return result;
        }

        public void DeleteOefeningen(SportData sportData)
        {
            _conn.Open();
            MySqlCommand sql = _conn.CreateCommand();

            sql.CommandText = "DELETE FROM `oefeningen` WHERE ID= @id";

            sql.Parameters.AddWithValue("@id", sportData.ID);
            sql.ExecuteNonQuery();
            _conn.Close();
        }

        public bool SaveOefeningen(SportData sportData)
        {
            bool result = true;
            try
            {
                if (_conn.State == ConnectionState.Closed)
                {
                    _conn.Open();
                }
                MySqlCommand sql = _conn.CreateCommand();
                sql.CommandText = @"INSERT INTO `oefeningen` (nameNL, nameEN, instructionNL, instructionEN) VALUES (@nameNL, @nameEN, @instructionNL, @instructionEN);";


                sql.ExecuteNonQuery();
            }
            catch (Exception e)
            {
                Console.WriteLine("***InsertIntoOefeningen***");
                Console.WriteLine(e.Message);
                result = false;
            }
            finally
            {
                if (_conn.State == ConnectionState.Open)
                {
                    _conn.Close();
                }
            }
            return result;
        }
    }
}
