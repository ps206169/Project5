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
    /// Interaction logic for Oefeningen.xaml
    /// </summary>
    public partial class Oefeningen : Window
    {
        public event PropertyChangedEventHandler PropertyChanged;
        protected void OnPropertyChanged([CallerMemberName] string name = null)
        {
            PropertyChanged?.Invoke(this, new PropertyChangedEventArgs(name));
        }

        private ObservableCollection<SportData> sportDataList = new ObservableCollection<SportData>();

        public ObservableCollection<SportData> SportDataList
        {
            get { return sportDataList; }
            set { sportDataList = value; }
        }
        private SportData selectedOefening;
        public SportData SelectedOefening
        {
            get { return selectedOefening; }
            set { selectedOefening = value; OnPropertyChanged(); }
        }
        
        public Oefeningen()
        {
            loadData();
            InitializeComponent();
            DataContext = this;
        }
        Project5DB _db = new Project5DB();
        public void loadData()
        {
            List<SportData> LstSportData = _db.GetSportDatas();

            if (LstSportData == null)
            {
                MessageBox.Show("Er is iets mis met je database");
            }
            else
            {
                SportDataList.Clear();
                foreach (SportData sportData in LstSportData)
                {
                    SportDataList.Add(sportData);
                }
            }
        }

        private void Wijzig_Click(object sender, RoutedEventArgs e)
        {

        }

        private void Verwijder_Click(object sender, RoutedEventArgs e)
        {

        }

        private void BtRefresh_Click(object sender, RoutedEventArgs e)
        {

        }

        private void BtCreate_Click(object sender, RoutedEventArgs e)
        {

        }

        private void BtUsers_Click(object sender, RoutedEventArgs e)
        {

        }

        private void BtPrestaties_Click(object sender, RoutedEventArgs e)
        {

        }

        private void BtSwitch_Click(object sender, RoutedEventArgs e)
        {
            if (LstEnglish.Visibility == Visibility.Hidden)
            {
                LstEnglish.Visibility = Visibility.Visible;
                LstNederlands.Visibility = Visibility.Hidden;
            }
            else if(LstNederlands.Visibility == Visibility.Hidden)
            {
                LstNederlands.Visibility = Visibility.Visible;
                LstEnglish.Visibility = Visibility.Hidden;
            }
        }
    }
}
