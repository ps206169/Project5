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
    /// Interaction logic for Create.xaml
    /// </summary>
    public partial class Create : Window
    {
        public Create()
        {
            InitializeComponent();
        }

        Project5DB _db = new Project5DB();
        private void Button_Click(object sender, RoutedEventArgs e)
        {
            if ((string.IsNullOrEmpty(TBNaamNL.Text)) || (string.IsNullOrEmpty(TBNaamEN.Text)) || (string.IsNullOrEmpty(TBBeschrijvingNL.Text)) || (string.IsNullOrEmpty(TBBeschrijvingEN.Text)))
            {
                MessageBox.Show("Graag gegevens invoeren");
            }
            else
            {
                try
                {
                    if (!_db.SaveOefeningen(TBNaamNL.Text, TBNaamEN.Text, TBBeschrijvingNL.Text, TBBeschrijvingEN.Text))
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
