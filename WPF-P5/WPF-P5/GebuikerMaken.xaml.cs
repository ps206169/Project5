using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Shapes;
using WPF_P5.models;
namespace WPF_P5
{
    /// <summary>
    /// Interaction logic for GebuikerMaken.xaml
    /// </summary>
    public partial class GebuikerMaken : Window
    {
        public GebuikerMaken()
        {
            InitializeComponent();
        }
        private string Salt;
        private string hash;
        Project5DB _db = new Project5DB();
        private void BTMaken_Click(object sender, RoutedEventArgs e)
        {
            if ((string.IsNullOrEmpty(TBName.Text)) || (string.IsNullOrEmpty(TBEmail.Text)) || (string.IsNullOrEmpty(TBPassword.Password)))
            {
                MessageBox.Show("Graag gegevens invoeren");
            }
            else
            {
                try
                {
                    Salt = BCrypt.Net.BCrypt.GenerateSalt();
                    hash = BCrypt.Net.BCrypt.HashPassword(TBPassword.Password, Salt);
                    string password;
                    string password1 = "$2y$";
                    string password2;
                    password2 = hash.Substring(4, hash.Length - 4);
                    password = password1 + password2;

                    if (!_db.InsertUser(TBName.Text, TBEmail.Text, password))
                    {
                        MessageBox.Show("Er is een fout bij het toevoegen");
                        return;
                    }
                    this.Close();
                }
                catch
                {
                    MessageBox.Show("Graag getal invoeren bij prijs");

                }

            }
        }
    }
}
