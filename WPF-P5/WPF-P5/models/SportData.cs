﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace WPF_P5.models
{
    public class SportData
    {
        private ulong id;

        public ulong ID
        {
            get { return id; }
            set { id = value; }
        }
        private string nameNL;

        public string Namenl
        {
            get { return nameNL; }
            set { nameNL = value; }
        }
        private string nameEN;

        public string Name_en
        {
            get { return nameEN; }
            set { nameEN = value; }
        }




    }
}
