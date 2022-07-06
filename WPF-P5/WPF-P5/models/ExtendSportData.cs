using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace WPF_P5.models
{
     public class ExtendSportData: Notify
    {
        private string instructionNL;

        public string InstructionNL
        {
            get { return instructionNL; }
            set { instructionNL = value; OnPropertyChanged(); }
        }

        private string instructionEN;

        public string InstructionEN
        {
            get { return instructionEN; }
            set { instructionEN = value; OnPropertyChanged(); }
        }
    }
}
