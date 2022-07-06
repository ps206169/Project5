using System;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using Microsoft.VisualStudio.TestTools.UnitTesting;
using WPF_P5;
using WPF_P5.models;

namespace UnitTestProject5
{
    [TestClass]
    public class UnitTest1
    {
        private ObservableCollection<SportData> sportDataList = new ObservableCollection<SportData>();

        public ObservableCollection<SportData> SportDataList
        {
            get { return sportDataList; }
            set { sportDataList = value; }
        }
        [TestMethod]
        public void Sportdata()
        {
            Project5DB db = new Project5DB();
            List<SportData> sport = db.GetSportDatas();
            try
            {
                SportDataList.Clear();
                foreach(SportData sportData in sport )
                {
                    SportDataList.Add(sportData);
                }

            }
            catch
            {

            }
    }
    }
}
