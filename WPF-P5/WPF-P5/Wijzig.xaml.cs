using System;
using System.Collections.Generic;
using System.Collections.ObjectModel;
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
using System.ComponentModel;
using System.Runtime.CompilerServices;

namespace WPF_P5
{
    /// <summary>
    /// Interaction logic for Wijzig.xaml
    /// </summary>
    public partial class Wijzig : Window
    {

     

        Project5DB _db = new Project5DB();

       
        int ID = 0;
        public Wijzig(int  id )
        {
            ID = ID + id;
            InitializeComponent();
            loadData();
        }
       
        public void loadData()
        {
            if (_db.GetSportDataBYID(ID) == null)
            {
                MessageBox.Show("Er is een fout opgetrijden tijdens het data ophallen", "", MessageBoxButton.OK, MessageBoxImage.Error);

            }
            else
            {
                SportData sport = _db.GetSportDataBYID(ID);
               TBNaamNL.Text = sport.Namenl;
                TBNaamEN.Text = sport.Name_en;
                TBBeschrijvingNL.Text = sport.InstructionNL;
                TBBeschrijvingEN.Text = sport.InstructionEN;

            }

        }
        private void Button_Click(object sender, RoutedEventArgs e)
        {
           
            string naamEN = TBNaamEN.Text;

            string naamNL = TBNaamNL.Text;
            string Instructionen = TBBeschrijvingEN.Text;
            string Instructionnl = TBBeschrijvingNL.Text;

            try
            {
                if (!_db.UpdateOefeningen(ID, naamNL, naamEN , Instructionnl, Instructionen))
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
