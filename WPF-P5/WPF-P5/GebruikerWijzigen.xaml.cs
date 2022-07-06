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
    /// Interaction logic for GebruikerWijzigen.xaml
    /// </summary>
    public partial class GebruikerWijzigen : Window
    {
        int id = 0;
        public GebruikerWijzigen(int ID)
        {
            InitializeComponent();
            id = id + ID;
            LoadData();
        }
        Project5DB dB = new Project5DB();
        private void LoadData()
        {
            if (dB.getUsersBYID(id) == null)
            {
                MessageBox.Show("Er is een fout opgetrijden tijdens het data ophallen", "", MessageBoxButton.OK, MessageBoxImage.Error);

            }
            else
            {

                Users user = dB.getUsersBYID(id);
                TBVoornaam.Text = user.Name;
                TBEmail.Text = user.Email;

            }

        }

        private void BTOpslaan_Click(object sender, RoutedEventArgs e)
        {
            try
            {
                if (!dB.UpdateUser(id, TBVoornaam.Text, TBEmail.Text))
                {
                    MessageBox.Show("Er is een fout bij het update");
                    return;
                }
                this.Close();
            }
            catch
            {
                MessageBox.Show("Er is een fout bij het update");
            }
        }
    }
}
