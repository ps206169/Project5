   M S B A M L   `   `   `  ����A  =WPF-P5, Version=1.0.0.0, Culture=neutral, PublicKeyToken=nullclr-namespace:WPF_P5WPF_P5  5   	       WPF_P5.Gebruikers   5   	   \ XPresentationFramework, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35R NWindowsBase, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35W SPresentationCore, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35D 9http://schemas.microsoft.com/winfx/2006/xaml/presentation    5   	   R NSystem.Xaml, Version=4.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089:x,http://schemas.microsoft.com/winfx/2006/xaml     5   	   @d2http://schemas.microsoft.com/expression/blend/2008     5   	   Jmc;http://schemas.openxmlformats.org/markup-compatibility/2006     5   	   &localclr-namespace:WPF_P5     5   	     � Title$  
Gebruikers��5   	   $	��450��6   $	��800��6)   .��5	      �  � ColumnDefinitions 5
   
   �� 5      $��2* �6   �� 5      $��1* �6    � RowDefinitions 5   
   �� 5      $��1* �6   6*   .+�5   
   �� $	��800��6   $	��450��6    $��2��6-   ��5      �� 5       �� 
StartPoint$	 0,0&�6&    �� EndPoint$	 1,1&�67   .��5      �  � Color$ #FF80AB��6#    � Offset$	 0.0Q�63   � 5      $ #6A1B9A��6#   $
 0.25Q�63   � 5      $ #4A148C��6#   $
 0.75Q�63   � 5      $ #3949AB��6#   $	 1.0Q�63   5      5      �� 5   
   $
��20px(�6   
Summa Move60   � 5   
   $��1��6    5!      �� 5"      $��1* �6#   �� 5#      $��2* �6#   �� 5$      $��1* �6#    5'      �� 5(      $��1* �6    .+�5*      �� $��1��6   $	��100��6&   $��40��62   $	��Top=�6>   $��10,70,10,10q�6V   .��6k   	Refresh6t   �� 5+      -   5        $��1��5+      $	��100��6&   $��40��62   $��Center=�6>   $��10,30,10,100q�6Y   .��6�   Create6�   �� 5,      -   5         ��Name$ BTOefeningen��5,      $��1��6,   $	��100��6<   $��40��6H   $��Center=�6T   $��10,100,10,0q�6o   .��6�   
Oefeningen6�   5-      &   System.Windows.Controls.DataGrid  5.   
   -   5          Name$ LstNederlands��5.   O   $	��350��6   $��0��6>   	   SelectionMode$	 Single=�6f   
   CanUserAddRows
 .     AutoGenerateColumns .     
IsReadOnly . ��6    �� *Users+ �� SelectedItem 5/      �� *SelectedUser+   Columns 50      0  *System.Windows.Controls.DataGridTextColumn  51      ,  &System.Windows.Controls.DataGridColumn   Header$ ID��6>   1  +System.Windows.Controls.DataGridBoundColumn   Binding 6'   �� *ID+   ElementStyle 52      �� 53       �� 
TargetType" ��6    .�54      ��  �� Property � �� �� Value$ 15(�69   6F   �� 55       � ��$ Black"�6;   6K   56      58        59      $
 Naam��6?      Width5  /System.Windows.Controls.DataGridLengthConverter$	 100 6M    6%   �� *Name+ 5:      �� 5;      " ��6    .�5<      ��  � ��$ 15(�69   6F   �� 5=       � ��$ Black"�6;   6K   5>      5@        5A      $ Email��6?   $	 250 6O    6%   �� *Email+ 5B      �� 5C      " ��6    .�5D      ��  � ��$ 15(�69   6F   �� 5E       � ��$ Black"�6;   6K   5F      5H      4  .System.Windows.Controls.DataGridTemplateColumn  5J         CellTemplate 5K      �� 5L      .R�5M      �� -   5        
�������.��5M   P   Wijzig5O      5P      5R        5S       5T      �� 5U      .R�5V      �� -   5        
�������.��5V   S   	Verwijder5X      5Y      5\      5^      5o      5p      