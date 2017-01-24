import java.awt.Component;
import java.awt.Container;
import java.awt.FlowLayout;
import java.awt.event.ComponentAdapter;
import java.awt.event.ComponentEvent;
import java.awt.event.ComponentListener;
import java.awt.event.MouseAdapter;
import java.awt.event.MouseEvent;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.util.LinkedList;
import java.util.List;

import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;

public class EyeTracker extends JFrame {
	public static List<Mot> ListeMot = new LinkedList(); 
	
	public EyeTracker() {
		super();
		CreateJFrame();
	}
		
	public void PositionMot(Container parent) {
		Component[] all = parent.getComponents();
		for (Component c : all) {
			if(!(((JLabel)c).getText().equals(",")) && (!((JLabel)c).getText().equals(".")) && (!((JLabel)c).getText().equals("?")) && (!((JLabel)c).getText().equals("!")))  {
				ListeMot.add(new Mot(c.getX(), c.getY(), ((JLabel)c).getText()));
			}
		}
	}
		
	private void CliqueSouris(JPanel panel) {
		panel.addMouseListener(new MouseAdapter() {
			public void mousePressed(MouseEvent e) {
				for(int i = 0; i < ListeMot.size(); i++) {
					int nbrelettre = ListeMot.get(i).getMot().length() * 6;
					if(e.getX() - ListeMot.get(i).getX() >= 0 && e.getX() - ListeMot.get(i).getX() <= nbrelettre && e.getY() - ListeMot.get(i).getY() >= 0 && e.getY() - ListeMot.get(i).getY() <= 13) {
						System.out.println("Vous avez cliqué sur le mot: " + ListeMot.get(i).getMot());
					}
				}
			}
		});
	}
		
	private JPanel RecuperationTexte(){
		FileInputStream contenuFichier = null;
		String texte = "";
		final JPanel p = new JPanel(new FlowLayout());
		try {
			contenuFichier = new FileInputStream(new File("Test.txt"));
			byte[] buffer = new byte[8];
			int n = 0;
			while((n = contenuFichier.read(buffer)) >= 0) {
				for(byte bit : buffer) {
					if((((char)bit != ' ')) && ((char)bit != '\n')){
						texte += (char)bit;
					}
					else {
						p.add(new JLabel(texte));
						texte = "";
					}
				}
				buffer = new byte[8];
			}
			texte = texte.substring(0, texte.length() - 3);
			p.add(new JLabel(texte));
		} catch(FileNotFoundException e) {
			e.printStackTrace();
		} catch(IOException e) {
			e.printStackTrace();
		} finally {
			try {
				if(contenuFichier != null) 
					contenuFichier.close();
			} catch(IOException e) {
				e.printStackTrace();
			}
		}
		ComponentListener cl = new ComponentAdapter() {
			@Override
			public void componentResized(ComponentEvent ce) {
				PositionMot(p);
			}
		};
		p.addComponentListener(cl);
		CliqueSouris(p);
		return p;
	}	
		
	private void CreateJFrame() {
		setTitle("Affichage du texte");
		setSize(1500,800); 
		setLocationRelativeTo(null); 
		setResizable(true);
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE); 
		setContentPane(RecuperationTexte());
	}
		
	public static void main(String[]args) {
		EyeTracker fenêtre = new EyeTracker();
		fenêtre.setVisible(true);
	}
}