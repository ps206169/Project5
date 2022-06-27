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

namespace WPF_P5
{
    /// <summary>
    /// Interaction logic for Oefeningen.xaml
    /// </summary>
    public partial class Oefeningen : Window
    {
        
        private ObservableCollection<SportData> sportDataList;

        public ObservableCollection<SportData> SportDataList
        {
            get { return sportDataList; }
            set { sportDataList = value; }
        }

        public Oefeningen()
        {
            loadData();
            InitializeComponent();
            DataContext = this;
        }
        Project5DB dB = new Project5DB();
        public  static void loadData()
        {
            if(db.GetSportDatas ==null)
            {

            }
        }

        private void Wijzig_Click(object sender, RoutedEventArgs e)
        {

        }

        private void Verwijder_Click(object sender, RoutedEventArgs e)
        {

        }
    }
}
