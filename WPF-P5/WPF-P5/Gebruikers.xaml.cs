using System;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.ComponentModel;
using System.Linq;
using System.Runtime.CompilerServices;
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
    /// Interaction logic for Gebruikers.xaml
    /// </summary>
    public partial class Gebruikers : Window, INotifyPropertyChanged
    {
        public event PropertyChangedEventHandler PropertyChanged;
        // Create the OnPropertyChanged method to raise the event
        // The calling member's name will be used as the parameter.
        protected void OnPropertyChanged([CallerMemberName] string name = null)
        {
            PropertyChanged?.Invoke(this, new PropertyChangedEventArgs(name));
        }

        Project5DB _db = new Project5DB();

        private ObservableCollection<Users> user = new ObservableCollection<Users>();
        public ObservableCollection<Users> Users
        {
            get { return user; }
            set { user = value; }
        }

        private Users selecteduser;
        public Users SelectedUser
        {
            get { return selecteduser; }
            set
            {
                selecteduser = value; OnPropertyChanged();
            }
        }
    
        public Gebruikers()
        {
            InitializeComponent();
            LoadData();
            DataContext = this;
        }
        private void LoadData()
        {
            if (_db.GetAlleUser() == null)
            {
                MessageBox.Show("Er is een fout opgetrijden tijdens het data ophallen", "", MessageBoxButton.OK, MessageBoxImage.Error);
            }
            else
            {

                List<Users> Gebruiker = _db.GetAlleUser();
                try
                {
                    Users.Clear();
                    foreach (Users item in Gebruiker)
                    {
                        Users.Add(item);
                    }
                }
                catch
                {
                    Users.Clear();
                    MessageBox.Show("Er is een fout opgetrijden tijdens het data ophallen", "", MessageBoxButton.OK, MessageBoxImage.Error);

                }
            }
        }
        private void Wijzig_Click(object sender, RoutedEventArgs e)
        {
            GebruikerWijzigen gebruikerWijzigen = new GebruikerWijzigen((int)selecteduser.ID);
            gebruikerWijzigen.ShowDialog();
            LoadData();
          
        }

        private void Verwijder_Click(object sender, RoutedEventArgs e)
        {
            if (!_db.DeleteUsersById((int)selecteduser.ID))
            {
                MessageBox.Show("Er is een fout bij het verwijderen");
                return;
            };
            LoadData();


        }
        private void BtCreate_Click(object sender, RoutedEventArgs e)
        {
            GebuikerMaken gebuikerMaken = new GebuikerMaken();
            gebuikerMaken.ShowDialog();
            LoadData();

        }

        private void BTOefeningen_Click(object sender, RoutedEventArgs e)
        {
            Oefeningen oefeningen = new Oefeningen();
            oefeningen.Show();
            this.Close();
        }
    }
}
