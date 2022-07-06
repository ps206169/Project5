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
        private MySqlConnection _conn = new MySqlConnection(ConfigurationManager.ConnectionStrings["CSproject5"]
                  .ConnectionString);
        public List<SportData> GetSportDatas()
        {
            List<SportData> sports = new List<SportData>();
            try
            {
                _conn.Open();
                MySqlCommand sql = _conn.CreateCommand();
                sql.CommandText =
                    @"SELECT o.id , o.nameNL,o.nameEN
                      FROM oefeningen o";
                MySqlDataReader reader = sql.ExecuteReader();
                DataTable table = new DataTable();
                table.Load(reader);
                foreach (DataRow row in table.Rows)
                {


                    SportData sportdata = new SportData();
                    sportdata.ID = (int)row["id"];
                    sportdata.Namenl = (string)row["nameNL"];
                    sportdata.Name_en = (string)row["nameEN"];
                    sports.Add(sportdata);
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
            return sports;
        }


        public SportData GetSportDataBYID(int ID)
        {
            SportData sport = new SportData();
            try
            {
                _conn.Open();
                MySqlCommand sql = _conn.CreateCommand();
                sql.CommandText =
                    "SELECT * FROM `oefeningen` WHERE id = @ID ";
                sql.Parameters.AddWithValue("@ID", ID);
                MySqlDataReader reader = sql.ExecuteReader();
                DataTable table = new DataTable();
                table.Load(reader);

                foreach (DataRow row in table.Rows)
                {
                    sport.ID = (int)row["id"];
                    sport.Namenl = (string)row["nameNL"];
                    sport.Name_en = (string)row["nameEN"];
                    sport.InstructionNL = (string)row["instructionNL"];
                    sport.InstructionEN = (string)row["instructionEN"];

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
            return sport;

        }




            public bool UpdateOefeningen(int ID, string nameNL,  string nameEN , string InstructionNL , string InstructionEN)
        {
            bool result = false;
            try
            {
                _conn.Open();
                MySqlCommand sql = _conn.CreateCommand();
                sql.CommandText = "UPDATE `oefeningen` SET  `id`= @id, `nameNL`= @nameNL , `nameEN`= @nameEN ,`instructionNL`= @InstructionNL,`instructionEN`= @InstructionEN  WHERE `oefeningen`. `id` = @id";

                sql.Parameters.AddWithValue("@id",ID);
                sql.Parameters.AddWithValue("@nameNL", nameNL);
                sql.Parameters.AddWithValue("@nameEN", nameEN);
                sql.Parameters.AddWithValue("@InstructionNL", InstructionNL);
                sql.Parameters.AddWithValue("@InstructionEN", InstructionEN);
                result = sql.ExecuteNonQuery() == 1;

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

        public bool DeleteOefeningen(int id)
        {
            bool result = false;
            try
            {
                _conn.Open();
                MySqlCommand sql = _conn.CreateCommand();
                sql.CommandText = " DELETE FROM oefeningen WHERE  ID = @ID";
                sql.Parameters.AddWithValue("@ID", id);

                result = sql.ExecuteNonQuery() == 1;
            }
            catch (Exception e)
            {
                Console.Error.WriteLine(e.Message);
                return  false ;
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

        public bool SaveOefeningen(string nameNL, string nameEN, string InstructionNL, string InstructionEN)
        {
            bool result = true;
            try
            {
                    _conn.Open();
                MySqlCommand sql = _conn.CreateCommand();
                sql.CommandText = @"INSERT INTO `oefeningen` (nameNL, nameEN, instructionNL, instructionEN) VALUES (@nameNL, @nameEN, @InstructionNL, @InstructionEN);";
                sql.Parameters.AddWithValue("@nameNL", nameNL);
                sql.Parameters.AddWithValue("@nameEN", nameEN);
                sql.Parameters.AddWithValue("@InstructionNL", InstructionNL);
                sql.Parameters.AddWithValue("@InstructionEN", InstructionEN);
                result = sql.ExecuteNonQuery() == 1;

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
        public List<Users> GetAlleUser()
        {
            List<Users> users = new List<Users>();
            try
            {
                _conn.Open();
                MySqlCommand sql = _conn.CreateCommand();
                //sql.CommandText = "SELECT users.id, users.name, users.email , users.password , user_roles.user_id , user_roles.role_id , roles.name FROM users INNER JOIN user_roles on user_roles.user_id = users.id INNER JOIN roles ON roles.id = user_roles.role_id";
                sql.CommandText = "SELECT * FROM users";
                MySqlDataReader reader = sql.ExecuteReader();
                DataTable table = new DataTable();
                table.Load(reader);

                foreach (DataRow row in table.Rows)
                {
                    Users comet = new Users();
                    comet.ID = (int)row["id"];
                    comet.Name = (string)row["name"];
                    comet.Email = (string)row["email"];


                    users.Add(comet);
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
            return users;
        }

        public Users getUsersBYID(int ID)
        {
            Users user = new Users();
            try
            {

                _conn.Open();
                MySqlCommand sql = _conn.CreateCommand();
                sql.CommandText = "SELECT * FROM users WHERE id = @ID ";
                sql.Parameters.AddWithValue("@ID", ID);
                MySqlDataReader reader = sql.ExecuteReader();
                DataTable table = new DataTable();
                table.Load(reader);

                foreach (DataRow row in table.Rows)
                {
                    user.ID = (int)row["id"];
                    user.Name = (string)row["name"];
                    user.Email = (string)row["Email"];
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
            return user;
        }
        public bool UpdateUser(int ID, string Name, string Email)
        {
            bool result = false;
            try
            {
                _conn.Open();
                MySqlCommand sql = _conn.CreateCommand();
                sql.CommandText = "UPDATE  users  SET  name = @name , email = @email   WHERE id  = @ID";
                sql.Parameters.AddWithValue("@ID", ID);
                sql.Parameters.AddWithValue("@name", Name);
                sql.Parameters.AddWithValue("@email", Email);
                result = sql.ExecuteNonQuery() == 1;
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

        public bool InsertUser(string Name, string Email, string Password)
        {
            bool result = false;
            try
            {
                _conn.Open();
                MySqlCommand sql = _conn.CreateCommand();
                sql.CommandText =
                    "INSERT INTO users( name , email , password )" +
                    " VALUES(@Name, @Email , @Password)";
                sql.Parameters.AddWithValue("@Name", Name);
                sql.Parameters.AddWithValue("@Email", Email);
                sql.Parameters.AddWithValue("@Password", Password);

                result = sql.ExecuteNonQuery() == 1;
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

        public bool DeleteUsersById(int id)
        {
            bool result = false;
            try
            {
                _conn.Open();
                MySqlCommand sql = _conn.CreateCommand();
                sql.CommandText =
                    " DELETE FROM users WHERE  id = @ID";
                sql.Parameters.AddWithValue("@ID", id);

                result = sql.ExecuteNonQuery() == 1;
               
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

    }
}
